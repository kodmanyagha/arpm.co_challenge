<?php

class PageController {
    function index() {
        $viewData = [
            'pageName' => 'homepage'
        ];

        return view('view', $viewData);
    }
    
    function folder1() {
        $viewData = [
            'pageName' => 'folder1'
        ];

        return view('view', $viewData);
    }

    function folder2() {
        $viewData = [
            'pageName' => 'folder2'
        ];

        return view('view', $viewData);
    }
}
