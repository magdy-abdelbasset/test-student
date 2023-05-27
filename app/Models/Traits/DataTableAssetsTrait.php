<?php

namespace App\Traits;

use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;

trait DataTableAssetsTrait
{
    public function column($make, $title, $orderable = true, $searchable = true, $exportable = true, $printable = true, $name = null)
    {
        $col = $orderable == true ? Column::make($make) : Column::computed($make);
        if ($name != null) {
            $col->name($name);
        }
        $col->title($title)
            ->orderable($orderable)
            ->searchable($searchable)
            ->exportable($exportable)
            ->printable($printable)
            ->addClass('text-center')
            ->content('-');

        return $col;
    }

    public function IndexColumn()
    {
        return $this->column('DT_RowIndex', '#', false, false)->name('DT_RowIndex');
    }

    public function IdColumn($visible = false)
    {
        return $this->column('id', __('ID'))->visible($visible);
    }

    public function addSearchInputs()
    {
        return "function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement(\"input\");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
                $(input).addClass('form-control');
            });
        }";
    }

    public function EditDeleteButtons($row,$arr)
    {
        $item_edit = [
            "can" => auth()->user()->can('edit.'. $arr['can'] ),
            "href" => route($arr['name'] . '.edit', $row->id)
        ];
        $item_delete = [
            "can" => auth()->user()->can('delete.'. $arr['can'] ),
            "action" => route($arr['name'] . '.destroy', $row->id),
        ];
        return '<span
                                style="
                                    display:flex
                                "
                            >' .
            view('partials.edit-btn', ["item" => $item_edit]) .
            view('partials.delete-btn', ["item" => $item_delete]) .
            '</span>';
    }
    public function EditDeleteButtons2($arr)
    {
        $item_edit = [
            "can" => $arr["edit"]["can"],
            // auth()->user()->can('edit.'. $arr['can'] ),
            "href" => $arr["edit"]["href"]
        ];
        $item_delete = [
            "can" => $arr["delete"]["can"],
            // auth()->user()->can('delete.'. $arr['can'] ),
            "action" => $arr["delete"]["action"],
        ];
        return '<span
                                style="
                                    display:flex
                                "
                            >' .
            view('partials.edit-btn', ["item" => $item_edit]) .
            view('partials.delete-btn', ["item" => $item_delete]) .
            '</span>';
    }
    public function EditDeleteBookingButtons($arr)
    {
        $item_edit = [
            "can" => $arr["edit"]["can"],
            // auth()->user()->can('edit.'. $arr['can'] ),
            "href" => $arr['edit']["href"]
        ];
        $item_delete = [
            "can" => $arr["delete"]["can"],
            // auth()->user()->can('delete.'. $arr['can'] ),
            "action" => $arr["delete"]["action"]
        ];
        $item = [
            "can" => $arr["booking"]["can"],
            // auth()->user()->can('delete.'. $arr['can'] ),
            "href" => $arr["booking"]["href"],
        ];
        return '<span
                                style="
                                    display:flex
                                "
                            >' .
            view('partials.edit-btn', ["item" => $item_edit]) .
            view('partials.delete-btn', ["item" => $item_delete]) .
            view('partials.booking', ["item" => $item]) .

            '</span>';
    }
    public function onlyEdit($row, $arr)
    {
        $item = [
            "can" => auth()->user()->can('edit.'.$arr['can']),
            "href" => route($arr['route'], $row->id)
        ];
        return '<span
                                style="
                                    display:flex
                                "
                            >' .
            view('partials.edit-btn', ["item" => $item]) .
            '</span>';
    }

    public function onlyDelete($arr)
    {
        $item = [
            "can" => $arr['can'],
            "action" => $arr["action"]
        ];
        return '<span
                                style="
                                    display:flex
                                "
                            >' .
            view('partials.delete-btn', ["item" => $item]) .
            '</span>';
    }
}
