<?php

namespace App\Traits;

use Exception;

trait ExportableTrait
{
    /**
     * Prepares the data of an entity to json.
     * @throws Exception
     */
    public function export(): string
    {
        $json = $this->toArray();

        // Foreign attributes? character's traits and stuff
        if (property_exists($this, 'foreignExport')) {
            foreach ($this->foreignExport as $foreign) {
                $json[$foreign] = [];
                try {
                    foreach ($this->$foreign as $model) {
                        $json[$foreign][] = $model->toArray();
                    }
                } catch (Exception $e) {
                    throw new Exception("Unknown relation '{$foreign}' on model " . get_class($this));
                }
            }
        }

        // Entity values
        if (!empty($this->entity)) {
            // Todo: put these in with()
            $foreigns = ['notes', 'relationships', 'abilities', 'events', 'tags', 'assets', 'entityAttributes'];
            foreach ($foreigns as $foreign) {
                foreach ($this->entity->$foreign as $model) {
                    $json[$foreign][] = $model->toArray();
                }
            }
            /*$foreigns = ['attributes'];
            foreach ($foreigns as $foreign) {
                // Have to do the ()->get because of attributes being otherwise something else
                foreach ($this->entity->$foreign()->get() as $model) {
                    $json[$foreign][] = $model->toArray();
                }
            }*/
        }

        return json_encode($json);
    }
}
