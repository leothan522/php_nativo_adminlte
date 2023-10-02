<?php

namespace app\controller;

class PaginationController
{
    var $baseURL		= '';
    var $tableID		= '';
    var $totalRows  	= '';
    var $perPage	 	= 10;
    var $numLinks		=  2;
    var $currentPage	=  0;
    var $firstLink   	= 'Primero';
    var $nextLink		= '<i class="fas fa-caret-right"></i>';
    var $prevLink		= '<i class="fas fa-caret-left"></i>';
    var $lastLink		= 'Último';
    var $fullTagOpen	= '<div class="row col-12 justify-content-between">';
    var $fullTagClose	= '</div>';
    var $textTagOpen    = '<span class="mt-1">';
    var $textTagClose   = '</span>';
    var $navTagOpen     = '<nav aria-label="Page navigation"><ul class="pagination">';
    var $navTagClose    = '</ul></nav>';
    var $firstTagOpen	= '<li class="page-item">';
    var $firstTagClose	= '</li>';
    var $lastTagOpen	= '<li class="page-item">';
    var $lastTagClose	= '</li>';
    var $curTagOpen		= '<li class="page-item active" aria-current="page"><a class="page-link">';
    var $curTagClose	= '</a></li>';
    var $nextTagOpen	= '<li class="page-item">';
    var $nextTagClose	= '</li>';
    var $prevTagOpen	= '<li class="page-item">';
    var $prevTagClose	= '</li>';
    var $numTagOpen		= '<li class="page-item">';
    var $numTagClose	= '</li>';
    var $anchorClass	= 'page-link';
    var $showCount      = true;
    var $currentOffset	= 0;
    var $contentDiv     = '';
    var $additionalParam= '';

    function __construct($params = array()){
        if (count($params) > 0){
            $this->initialize($params);
        }

        if ($this->anchorClass != ''){
            $this->anchorClass = 'class="'.$this->anchorClass.'" ';
        }
    }

    function initialize($params = array()){
        if (count($params) > 0){
            foreach ($params as $key => $val){
                if (isset($this->$key)){
                    $this->$key = $val;
                }
            }
        }
    }

    /**
     * Generate the pagination links
     */
    function createLinks(){
        // If total number of rows is zero, do not need to continue
        if ($this->totalRows == 0 OR $this->perPage == 0){
            return '';
        }

        // Calculate the total number of pages
        $numPages = ceil($this->totalRows / $this->perPage);

        // Is there only one page? will not need to continue
        if ($numPages == 1){
            if ($this->showCount){
                $info = 'Mostrando : <span id="paginate_leyenda">' . $this->totalRows . '</span>';
                return $info;
            }else{
                return '';
            }
        }

        // Determine the current page
        if ( ! is_numeric($this->currentPage)){
            $this->currentPage = 0;
        }

        // Links content string variable
        $output = '';

        // Mostrando links notification
        if ($this->showCount){
            $currentOffset = $this->currentPage;
            $info = $this->textTagOpen;
            $info .= 'Mostrando ' . ( $currentOffset + 1 ) . ' a ' ;

            if( ( $currentOffset + $this->perPage ) < ( $this->totalRows -1 ) )
                $info .= $currentOffset + $this->perPage;
            else
                $info .= $this->totalRows;

            $info .= ' de <span id="paginate_leyenda">' . $this->totalRows . '</span>  registros.';
            $info .= $this->textTagClose;

            $output .= $info;
            $output .= $this->navTagOpen;

        }

        $this->numLinks = (int)$this->numLinks;

        // Is the page number beyond the result range? the last page will show
        if ($this->currentPage > $this->totalRows){
            $this->currentPage = ($numPages - 1) * $this->perPage;
        }

        $uriPageNum = $this->currentPage;

        $this->currentPage = floor(($this->currentPage/$this->perPage) + 1);

        // Calculate the start and end numbers.
        $start = (($this->currentPage - $this->numLinks) > 0) ? $this->currentPage - ($this->numLinks - 1) : 1;
        $end   = (($this->currentPage + $this->numLinks) < $numPages) ? $this->currentPage + $this->numLinks : $numPages;

        // Render the "First" link
        if  ($this->currentPage > $this->numLinks){
            $output .= $this->firstTagOpen
                . $this->getAJAXlink( '' , $this->firstLink)
                . $this->firstTagClose;
        }

        // Render the "previous" link
        if  ($this->currentPage != 1){
            $i = $uriPageNum - $this->perPage;
            if ($i == 0) $i = '';
            $output .= $this->prevTagOpen
                . $this->getAJAXlink( $i, $this->prevLink )
                . $this->prevTagClose;
        }

        // Write the digit links
        for ($loop = $start -1; $loop <= $end; $loop++){
            $i = ($loop * $this->perPage) - $this->perPage;

            if ($i >= 0){
                if ($this->currentPage == $loop){
                    $output .= $this->curTagOpen.$loop.$this->curTagClose;
                }else{
                    $n = ($i == 0) ? '' : $i;
                    $output .= $this->numTagOpen
                        . $this->getAJAXlink( $n, $loop )
                        . $this->numTagClose;
                }
            }
        }

        // Render the "next" link
        if ($this->currentPage < $numPages){
            $output .= $this->nextTagOpen
                . $this->getAJAXlink( $this->currentPage * $this->perPage , $this->nextLink )
                . $this->nextTagClose;
        }

        // Render the "Last" link
        if (($this->currentPage + $this->numLinks) < $numPages){
            $i = (($numPages * $this->perPage) - $this->perPage);
            $output .= $this->lastTagOpen . $this->getAJAXlink( $i, $this->lastLink ) . $this->lastTagClose;
        }

        $output .= $this->navTagClose;

        // Remove double slashes
        $output = preg_replace("#([^:])//+#", "\\1/", $output);

        // Add the wrapper HTML if exists
        $output = $this->fullTagOpen.$output.$this->fullTagClose;

        return $output;
    }

    function getAJAXlink( $count, $text) {
        if( $this->contentDiv == '')
            return '<a href="'. $this->anchorClass . ' ' . $this->baseURL . $count . '">'. $text .'</a>';

        $pageCount = $count?$count:0;
        $this->additionalParam = "{'page' : $pageCount, 'limit' : $this->perPage, 'baseURL' : '$this->baseURL', 'totalRows' : '$this->totalRows', 'tableID' : '$this->tableID', 'opcion': 'paginate' }";

        return "<a href=\"javascript:void(0);\" " . $this->anchorClass . "
				onclick=\"$.post('". $this->baseURL."', ". $this->additionalParam .", function(data){
					   $('#". $this->contentDiv . "').html(data); datatable('".$this->tableID."'); }); return false;\">"
            . $text .'</a>';
    }
}