<?php

namespace App\DataTables;

use App\Models\Subcategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubcategoryDataTable extends DataTable
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
            // ->addColumn('action', 'subcategory.action');
            ->addColumn('action', function ($data) {
                if($data->status == "1"){
                $result = '<div class="btn-group">';
                $result .= '<a href="'.route("admin.subcategory.show",$data->id).'"><button class="btn-sm btn-outline-dark">Show</button></a>';
                $result .= '<a href="'.route("admin.subcategory.edit",$data->id).'"><button class="btn-sm btn-outline-primary">Edit</button></a>';
                $result .= '
               <form action="'.route("admin.subcategory.destroy",$data->id).'" method="POST">
               '.csrf_field().'
               '.method_field("DELETE").'
               <button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm("Are You Sure Want to Delete?")">Delete</button></form></div>';
                return $result;
            }else{
                return "it's Subcategory is Inactive....";
            }
            })
            ->editColumn('image', function($data){
            if($data->image){
                return '<img src="'.asset('assets/image/subcategory/'.$data->image).'" width="50px"></img>';
            } else {
                return '<img src="'.asset('assets/image/subcategory/'.$data->image).'" width="50px">';
            }
            })
            ->editColumn('status', function($data){
                if($data->status == "1")
                {
                    return "<a href='".route("admin.changesubcategory",$data->id)."'><button class='btn-sm btn-success'>Active</button></a>";
                }else{
                    return "<a href='".route("admin.changesubcategory",$data->id)."'><button class='btn-sm btn-danger'>Inactive</button></a>";
                }
            })
            ->editColumn('categorys_id', function ($data) {
                return $data->category['name'];
            })
            ->rawColumns(['action','image','status','categorys_id'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Subcategory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Subcategory $model)
    {
        return $model->with('category')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('subcategory-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
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
            Column::make('categorys_id')->title('category'),
            Column::make('name'),
            Column::make('image'),
            Column::make('status'),
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
        return 'Subcategory_' . date('YmdHis');
    }
}
