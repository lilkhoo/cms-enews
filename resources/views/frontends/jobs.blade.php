@extends('frontends.frontend')

@section('title', __('app.jobs'))

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-color: #2c4666">
            <div class="container position-relative">
                <h1>{{ $sectionSetting?->title }}</h1>
                <div style="word-wrap: break-word;">
                    {!! $sectionSetting?->description !!}
                </div>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/', []) }}" class="text-primary">{{ __('app.home') }}</a></li>
                        <li class="current">{{ __('app.jobs') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <section id="primary" class="content-area col-sm-12">
                    <main id="main" class="site-main" role="main">


                        <article id="post-126" class="post-126 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title">{{ $sectionSetting?->title }}</h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                {!! $sectionSetting?->description !!}
                                <p>&nbsp;</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Position</th>
                                            <th>Vacancy Deadline</th>
                                            <th>Current Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobLists as $job)
                                            <tr>
                                                <td><a href="{{ $job->filepath }}" target="_blank"
                                                        rel="noopener">{{ $job->position }}</a></td>
                                                <td>{{ $job->vacancy_deadline }}</td>
                                                <td>{{ $job->current_status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->

                    </main><!-- #main -->
                </section><!-- #primary -->

            </div><!-- .row -->
        </div>
    </main>
@endsection
