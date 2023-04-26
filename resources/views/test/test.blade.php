<h1>This is test blade</h1>
{{-- @foreach ($views as $key => $view )
<p>id::{{$room->id}}</p>
<p>name::{{$room->name}} </p>
<p>occupancy::{{$room->occupancy}}</p>
<p>View::{{$room->view_name}}</p>

    <p>view id::{{$view->id}}</p>
    <p>View Name::{{$view->name}}</p>

    @if($view->getRoom() !=null)
        <p>Room Name::
            @foreach ($view->getRoom as $key => $room )

                {{$room->name}},

            @endforeach
        </p>
    @endif
<hr>
@endforeach --}}

        {{-- View Name from Room And View Name --}}

@foreach ($rooms as $key => $room )

        <p>room name::{{$room->name}}</p>

        @if($room->getView() != null)
            <p>view name::{{$room->getView->name}}</p>
        @endif

        @if($room->getBed() != null)
            <p>bed name::{{$room->getBed->name}}</p>
        @endif

    <hr>

@endforeach
