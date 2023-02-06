<?php

namespace App\Traits;

use Illuminate\Support\Arr;

trait MentionTrait
{
    /**
     * Extract the mentions from a text
     * @param string|null $text
     * @return array
     */
    public function extract(string $text = null): array
    {
        $mentions = [];

        preg_match_all('`\[([a-z]+):(.*?)\]`i', $text, $segments);

        foreach ($segments[1] as $id => $type) {
            $options = explode('|', $segments[2][$id]);
            $id = Arr::first($options);
            $key = $type . '.' . $id;

            $data = [
                'type' => $type,
                'id' => $id,
            ];

            if (count($options) > 1) {
                // Skip the first segment
                unset($options[0]);
                foreach ($options as $option) {
                    $subSegments = explode(':', $option);
                    if (count($subSegments) === 1) {
                        $data['text'] = Arr::first($subSegments);
                        continue;
                    }

                    $type = Arr::first($subSegments);
                    $value = Arr::last($subSegments);
                    if ($type == 'page') {
                        $data['page'] = $value;
                    }
                }
            }

            $mentions[$key] = $data;
        }

        return $mentions;
    }

    /**
     * Extract the formatting for a mention
     * @param array $matches
     * @return array
     */
    protected function extractData(array $matches): array
    {
        $segments = explode('|', $matches[2]);

        // The first block should always be type:id
        $id = (int) Arr::first($segments);
        $type = $matches[1];

        $data = [
            'type' => $type,
            'id' => (int) $id,
        ];

        // Nothing else, we can go back
        if (count($segments) < 2) {
            return $data;
        }

        // Skip the first segment
        unset($segments[0]);
        foreach ($segments as $option) {
            $subSegments = explode(':', $option);
            if (count($subSegments) === 1) {
                $data['text'] = Arr::first($subSegments);
                $data['custom'] = true;
                continue;
            }

            $type = Arr::first($subSegments);
            $value = Arr::last($subSegments);
            if (in_array($type, ['page', 'field'])) {
                $data[$type] = mb_strtolower($value);
                $data['custom'] = true;
            } elseif (in_array($type, ['anchor', 'params'])) {
                $data[$type] = $value;
                $data['custom'] = true;
            } elseif ($type == 'alias') {
                $data['alias'] = (int)$value;
                $data['custom'] = true;
            }
        }

        return $data;
    }
}
