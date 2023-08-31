<div><a href="/">Home</a></div>
<a href="{{ route('categories.create') }}">New Category</a>

@if(session('message'))
    <div style="color: green;">{{session('message') }}</div>
@endif


<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>description</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($categories as $key => $department)
        <tr>
            <td>{{ $categories->firstItem() + $key  }}.</td>
            <td>{{ $Category->name }}.</td>
            <td>{{ $Category->created_at->format('F d, y') }}</td>
            <td>
                <a href="{{ route('$categories.edit', $Category) }}">Edit</a>

                <form action="{{ route('$categories.delete', $Category) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>


