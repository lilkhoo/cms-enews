<?php

namespace App\DataTables;

use App\Models\FooterSetting;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FooterSettingDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('images', function ($query) {
                return '<img style="width:70px" src="' . asset($query->images) . '"></img>';
            })
            ->addColumn('action', function ($query) {
                return '<a href="' . route('admin.footer-setting.edit', $query->id) . '" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="' . route('admin.footer-setting.destroy', $query->id) . '" class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
            })
            ->setRowId('id')
            ->rawColumns(['images', 'action',]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\FooterSetting $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(FooterSetting $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('footer-setting-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle()
            ->buttons([
                // Button::make('excel'),
                // Button::make('csv'),
                // Button::make('pdf'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('images')->width(20)->title('Picture'),
            Column::make('title')->width(20)->title('Title'),
            Column::make('name')->width(20)->title('Name'),
            Column::make('email')->width(20)->title('Email'),
            Column::make('phone')->width(20)->title('Phone'),
            Column::make('call')->width(20)->title('Call'),
            Column::computed('action')->width(5)
                ->exportable(false)
                ->printable(false)
                ->width(10)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'FooterSetting_' . date('YmdHis');
    }
}
