<?php

namespace System\Src;class Paginate
{
    public static function view($sumRow = 0, $limit = 2, $page = 1, $url = '')
    {
        $numberPage = ceil($sumRow / $limit);

        $html = '<div class="col-12">
                    <ul class="paginator paginator--list">';
        if ($page > 1) {
            $html .= '<li class="paginator__item paginator__item--prev">
                        <a href="'.$url.'?page='. ($page - 1) .'"><i class="icon ion-ios-arrow-back"></i></a>
                    </li>';
        }

        $start = $page >= 3 ? ($page - 2) : 1;
        $end = ($numberPage - $page) < 2 ? $numberPage : ($page + 2);

        for ($i = $start; $i <= $end; $i++) {
            $html .= '<li class="paginator__item '.($page == $i ? 'paginator__item--active':'').'">
                        <a href="'.$url.'?page='. $i .'" >'. $i .'</a>
                    </li>';
        }

        if ($page < $numberPage) {
            $html .= '<li class="paginator__item paginator__item--next">
                        <a href="'.$url.'?page='. ($page + 1) .'"><i class="icon ion-ios-arrow-forward"></i></a>
                    </li>';
        }

        $html .= '</ul>
                </div>';

        return $html;
    }
}
