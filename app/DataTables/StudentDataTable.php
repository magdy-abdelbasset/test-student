<?php

namespace App\DataTables;

use App\Models\Student;
use App\Traits\DataTableAssetsTrait;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class StudentDataTable extends DataTable
{
    use DataTableAssetsTrait;

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
            ->editColumn('image', function ($query) {
                $image = $query->image;
                return !empty($query->image) ?  view("partials.img",compact('image')) : '';
            })
            ->addColumn('action', function ($row) {
                $item_edit =[
                    "can" => auth()->user() ,
                    // auth()->user()->can('edit.'. $arr['can'] ),
                    "href" =>route( 'students.edit', $row->id) 
                ];
                $item_delete =[
                    "can" => auth()->user() ,
                    // auth()->user()->can('delete.'. $arr['can'] ),
                    "action" =>route("students.destroy", $row->id) ,
                ];
                // $item =[
                //     "can" => auth()->user() ,
                //     // auth()->user()->can('delete.'. $arr['can'] ),
                //     "href" =>route('student-course.createPayment2',$row->id),
                // ];
                return $this->EditDeleteButtons2(["delete"=>$item_delete,"edit"=>$item_edit]);
            })
            ->rawColumns(['action','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
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
        $buttons = [
                
               
            // Button::make('excel')->addClass('border border-white'),
            // Button::make('csv')->addClass('border border-white'),
            // // Button::make('pdf'),
            // Button::make('print')->addClass('border border-white'),
            // Button::make('reset')->addClass('border border-white'),
            // Button::make('reload')->addClass('border border-white'),
            Button::make('add')->addClass('btn-dark')
        ];
        
        return $this->builder()
            ->setTableId('students-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons($buttons);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title(__('students.id')),
            Column::make('uid')->title(__('students.uid')),
            // $this->IdColumn(false),
            Column::make('name')->title(__('students.name'))->content('-'),
            Column::make('mobile')->title(__('students.mobile'))->content('-'),
            Column::make('notes')->title(__('students.notes'))->content('-'),
            Column::make('created_at')->title(__('students.created_at'))->content('-'),
            // Column::computed('count_sub_sub')->title( __('Count Sub Sub'))->content('-'),
            Column::computed('image')->title(__('students.image'))->content('-')->exportable(false)
                ->printable(false),
            Column::computed('action')->title(__('crud.actions'))->content('-')->exportable(false)
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
    // protected function filename()
    // {
    //     return '' . date('YmdHis');
    // }
    protected function filename(): string
    {
        return 'Student_' . date('YmdHis');
    }
}
