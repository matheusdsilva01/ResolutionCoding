<div>
    <form action="{{route('createTask')}}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="content">
        <button type="submit">CRIAR</button>
    </form>
</div>
