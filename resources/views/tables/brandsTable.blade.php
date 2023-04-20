<!DOCTYPE html>
<html lang="en">
  @include('tables/tablesHead/brandsTableHead')
  <body>
    @if ($message = Session::get('success'))
    <form>
      <div class="alert alert-success alert-block text-dark alert-dismissible">
        <strong>{{ $message }}</strong>
        <button type="submit" class="btn-close"></button>
      </div>
    </form>
    @endif

    <div class="container mt-5">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Brand Image</th>
            <th>Brand Name</th>
            <th>Edit Brand</th>
            <th>Delete Brand</th>
          </tr>
        </thead>

        @foreach ($data as $key => $data)

        <tbody>
          <tr>
            <th>{{ $key + 1 }}</th>
            @if($data->image)
            <td>{{ $data->image }}</td>
            @else
            <td>{!! $data->name !!}</td>
            @endif
            <td>{!! $data->name !!}</td>
            <td>
              <a href="editBrand/{{ $data->id }}"
                ><i
                  class="fas fa-pencil text-warning me-2 ms-1 mb-2 fa-fw fa-2x"
                  role="button"
                ></i
              ></a>
            </td>
            <td>
              <a href="removeBrand/{{ $data->id }}"
                ><i
                  class="fas fa-xmark text-danger me-2 ms-1 mb-2 fa-fw fa-2x"
                  role="button"
                ></i
              ></a>
            </td>
          </tr>
        </tbody>
        @endforeach

        <tfoot>
          <tr>
            <th>Id</th>
            <th>Brand Image</th>
            <th>Brand Text</th>
            <th>Edit Brand</th>
            <th>Delete Brand</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>
</html>
