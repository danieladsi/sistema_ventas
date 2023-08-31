<div type="margin-button: 1em;">
    <a href="{{ route('cities.index') }}">Cities List</a>
</div>

<h1>Edit City</h1>

@if(session('message'))
    <div style="color:green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('cities.edit', $city) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter city" value="{{$city->name}}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="department_id">Department</label>
        <select name="Department_id" id="Department_id">
            <option value="">Select</option>
            @foreach($Department as $Department)
                <option
                    @if($category->id == (int) $city->department_id)
                        selected
                    @endif
                    value="{{ $Department->id }}">{{ $Department->name }}</option>
            @endforeach
        </select>
        @error('department_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>


    <div>
        <button type="submit">Submit</button>
    </div>
</form>
