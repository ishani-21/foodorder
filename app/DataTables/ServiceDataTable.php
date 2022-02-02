<?php

namespace App\DataTables;

use App\Models\Service;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            // ->addColumn('action', 'service.action');
            ->addColumn('action', function ($data) {
                $result = '<div class="btn-group">';
                $result .= '<a href="'.route("admin.service.show",$data->id).'"><button class="btn-sm btn-outline-dark">Show</button></a>';
                $result .= '<a href="'.route("admin.service.edit",$data->id).'"><button class="btn-sm btn-outline-primary">Edit</button></a>';
                $result .= '
               <form action="'.route("admin.service.destroy",$data->id).'" method="POST">
               '.csrf_field().'
               '.method_field("DELETE").'
               <button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm("Are You Sure Want to Delete?")">Delete</button></form></div>';
                return $result;
            })
            ->editColumn('image1', function($data){
            if($data->image1){
                return '<img src="'.asset('assets/image/service/'.$data->image1).'" width="50px"></img>';
            } else {
                return '<img src="'.asset('assets/image/service/'.$data->image1).'" width="50px">';
            }
            })
            ->rawColumns(['action','image1'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Service $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Service $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('service-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('description'),
            Column::make('image1'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Service_' . date('YmdHis');
    }
}
