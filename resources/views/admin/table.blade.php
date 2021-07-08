<table class="table table-striped">
    <thead>
        <tr>
            <td>numero</td>
            <td>nom</td>
            <td>prix</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
           <td>{{ $product->id }}</td>
           <td>{{ $product->name }}</td>
           <td>{{ $product->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
  