@extends('layouts.document-base')

@section('title', $title ?? 'Documentation')


@section('content')
    @php
        $Parsedown = new \Parsedown();

        if ($content) {
            $content = str_replace('[[app_url]]', env('APP_URL'), $content);

            echo $Parsedown->text($content);
        } else {
            $markdown = file_get_contents(public_path('docs/1-getting-started/1-introduction.md'));

            $markdown = str_replace('[[app_url]]', env('APP_URL'), $markdown);

            echo $Parsedown->text($markdown);
        }
    @endphp
@endsection