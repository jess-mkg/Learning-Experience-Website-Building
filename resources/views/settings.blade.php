@extends('layouts.app')

@section('content')
<title>Settings</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    {{ __('User: ') }}{{ Auth::user()->name }}
                </div>

                <div class=tree-container>
                    <figure class="result-tree">
                        <div class="branches branches-l">
                            <div data-toggle="tooltip" data-placement="top" title="Cognitive" class="branch cat-branch-l">
                                <div class="branch-l-top">
                                    <div class="mini-branch-t" style="margin-left:-50px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-t" style="margin-left: 20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-l-middle">
                                    <div class="mini-branch-m">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-l-bottom">
                                    <div class="mini-branch-b" style="margin-left: 20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-b" style="margin-left:-50px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="tooltip" data-placement="top" title="Social Emotional" class="branch cat-branch-l">
                                <div class="branch-l-top">
                                    <div class="mini-branch-t" style="margin-left:-50px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-t" style="margin-left: 20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-l-middle">
                                    <div class="mini-branch-m">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-l-bottom">
                                    <div class="mini-branch-b" style="margin-left: 20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-b" style="margin-left:-50px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="branches branches-r">
                            <div data-toggle="tooltip" data-placement="top" title="Physical" class="branch cat-branch-r">
                                <div class="branch-r-top">
                                    <div class="mini-branch-t" style="margin-left:-20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-t">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-r-middle">
                                    <div class="mini-branch-m">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-r-bottom">
                                    <div class="mini-branch-b" style="margin-left:-20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-b">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="tooltip" data-placement="top" title="Spiritual" class="branch cat-branch-r">
                                <div class="branch-r-top">
                                    <div class="mini-branch-t" style="margin-left:-20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-t">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-r-middle">
                                    <div class="mini-branch-m">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="branch-r-bottom">
                                    <div class="mini-branch-b" style="margin-left:-20px;">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                    <div class="mini-branch-b">
                                        <div class="m-b-t">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-m">
                                            <span class="leaf"></span>
                                        </div>
                                        <div class="m-b-b">
                                            <span class="leaf"></span>
                                            <span class="leaf"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </figure>
                </div>

                <div class="card-body">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
