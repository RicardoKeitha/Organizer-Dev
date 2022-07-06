{{--
  Template Name: Flexible Template
--}}

@extends('layouts.app')

@section('content')
    @php
      if( have_rows('flex_content') ):
        while ( have_rows('flex_content') ) : the_row(); //Verifica os layouts
          $flex = str_replace('_','-',get_row_layout());
          $flex = 'partials.'.$flex;
    @endphp
          @include($flex) 
    @php
        endwhile;
      endif;
    @endphp
    
@endsection
