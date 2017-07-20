@extends('layouts.master')

@section('title')
  People
@stop

@section('content')

  <h3>People</h3>

  <div>

      @if (count($people) > 0) 
      <div class="table-responsive">         
            <table class="table table-striped">
              <!-- Table Headings -->
              <thead>
                <th>Emails</th>
                <th>Json Sorted by Age</th>
              </thead>

              <!-- Table Body -->
              <tbody>
                @foreach ($people as $persons)               
                  <tr>
                    <td class="table-text">
                      <div>{{ $persons->emails }}</div>
                    </td>

                    <td>
                      <div>{{ $persons->age_sorted }}</div>
                    </td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
    @endif
  </div>

  <div>
  <a href="{{url('/')}}">Back</a>
  </div>


@stop