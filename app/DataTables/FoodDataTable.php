<?php

namespace App\DataTables;

use App\Models\Food;
use Yajra\DataTables\Html\Button;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FoodDataTable extends DataTable
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
            // ->addColumn('action', 'food.action');
            ->addColumn('action', function ($data) {
                $result = '<div class="btn-group">';
                $result .= '<a href="'.route("admin.food.show",$data->id).'"><button class="btn-sm btn-outline-dark">Show</button></a>';
                $result .= '<a href="'.route("admin.food.edit",$data->id).'"><button class="btn-sm btn-outline-primary">Edit</button></a>';
                $result .= '
               <form action="'.route("admin.food.destroy",$data->id).'" method="POST">
               '.csrf_field().'
               '.method_field("DELETE").'
               <button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm("Are You Sure Want to Delete?")">Delete</button></form></div>';
                return $result;
            })
            ->editColumn('image', function($data){
                if($data->image){
                    return '<img src="'.asset('assets/image/food/'.$data->image).'" width="50px"></img>';
                } else {
                    return '<img src="'.asset('assets/image/food/'.$data->image).'" width="50px">';
                }
            })
            ->editColumn('status', function($data){
                if($data->status == "1")
                {
                    return "<a href='".route("admin.changefoodstatus",$data->id)."'><button class='btn-sm btn-success'>Active</button></a>";
                }else{
                    return "<a href='".route("admin.changefoodstatus",$data->id)."'><button class='btn-sm btn-danger'>Inactive</button></a>";
                }
            })
            ->editColumn('restaurants_id', function ($data) {
                return $data->restaurent['name'];
            })

            ->editColumn('categorys_id', function ($data) {
                return $data->category['name'];
            })
            ->editColumn('subcategorys_id', function ($data) {
                return $data->subcategory['name'];
            })
            ->rawColumns(['action','image','status'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Food $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Food $model, Request $request)
    {
        if (isset($request->type)) {
            $model =  $model->where('restaurants_id', $request->type);
        }
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
                    ->setTableId('food-table')
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
            Column::make('restaurants_id'),
            Column::make('categorys_id'),
            Column::make('subcategorys_id'),
            Column::make('name'),
            Column::make('price'),
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
        return 'Food_' . date('YmdHis');
    }
}
