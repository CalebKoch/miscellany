<?php

namespace App\Http\Controllers;

use App\Datagrids\Actions\NoDatagridActions;
use App\Models\DiceRollResult;
use Illuminate\Http\Request;

class DiceRollResultController extends CrudController
{
    /**
     * @var string
     */
    protected string $view = 'dice_roll_results';
    protected string $route = 'dice_roll_results';

    /** @var string Model */
    protected $model = \App\Models\DiceRollResult::class;

    /** @var string Filter */
    protected $filter = DiceRollResult::class;

    protected string $forceMode = 'table';

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->addNavAction(
            route('dice_rolls.index'),
            '<i class="fa-solid fa-square"></i> ' . __('dice_rolls.index.actions.dice')
        );
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$this->authorize('browse', $this->model);

        $model = new $this->model();
        $this->filterService->request($request)
            ->model($model)
            ->make($this->view);
        $name = $this->view;
        $langKey = $name;
        $actions = $this->navActions;
        $filters = $this->filters;
        $filterService = $this->filterService;
        $datagridActions = new NoDatagridActions();

        $base = $model
            ->search(request()->get('search'))
            ->order($this->filterService->order())
        ;
        $unfilteredCount = $base->count();
        $base = $base->filter($this->filterService->filters());
        $filteredCount =  $base->count();
        $filter = false; //new $this->filter;
        $route = 'dice_roll_results';
        $mode = 'table';
        $forceMode = $this->forceMode;

        $models = $base->paginate();
        return view('cruds.index', compact(
            'models',
            'name',
            'model',
            'actions',
            'route',
            'filter',
            'filters',
            'filterService',
            'filteredCount',
            'unfilteredCount',
            'langKey',
            'datagridActions',
            'mode',
            'forceMode',
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(DiceRollResult $diceRollResult)
    {
        return redirect()->route('dice_rolls.show', $diceRollResult->diceRoll);
    }
}
