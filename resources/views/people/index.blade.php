@extends('layouts.master')

@section('title')
  People
@stop

@section('content')

  <h3>People</h3>

  <div>

      @if (count($people) > 0)
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table table-striped task-table">

              <!-- Table Headings -->
              <thead>
                <th>Emails</th>
                <th>Json Sorted by Age</th>
              </thead>

              <!-- Table Body -->
              <tbody>
                @foreach ($people as $persons)               
                  <tr>
                    <!-- Task Name -->
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
        </div>
    @endif
  </div>

  <div>
  <a href="{{url('/')}}">Back</a>
  </div>


@stop