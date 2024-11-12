<nav class="sticky top-[4.5rem] w-64 text-base xl:w-72">
    <ul role="list" class="-ml-0.5 h-[calc(100vh-4.5rem)] overflow-y-auto py-7 pl-0.5 space-y-8 pr-8 xl:pr-16">
        @php
            function generateList($directory)
            {
                $items = scandir($directory);
                $list = '';

                foreach ($items as $item) {
                    if ($item === '.' || $item === '..') {
                        continue;
                    }

                    $path = $directory . '/' . $item;
                    $item = str_replace('.md', '', $item);
                    $paths = explode('/', $directory);
                    $route = route('docs', ['path' => array_pop($paths), 'title' => $item]);
                    $item = str_replace('-', ' ', $item);
                    $item = ucfirst(trim(substr($item, 1)));
                    if (is_dir($path)) {
                        $list .= '<li>';
                        $list .=
                            '<h3 class="font-semibold tracking-tight text-slate-900">' .
                            htmlspecialchars($item) .
                            '</h3>';
                        $list .= '<ul role="list" class="pl-3 mt-3 space-y-2">';
                        $list .= generateList($path);
                        $list .= '</ul>';
                        $list .= '</li>';
                    } else {
                        $list .= '<li>';
                        $list .=
                            '<a href="' .
                            $route .
                            '" class="text-slate-600 hover:text-slate-800">' .
                            htmlspecialchars($item) .
                            '</a>';
                        $list .= '</li>';
                    }
                }

                return $list;
            }

            echo generateList(public_path('docs'));
        @endphp
    </ul>
</nav>
