
<x-app-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Leads</h4>
                            </div>

                            <div class="card-body">


                                    <div class="table-responsive" id="table-gridjs">
                                        <table class="table table-bordered gridjs-table" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Project Description</th>
                                                    <th scope="col"> Date </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @can('Lead Access')
                                                   @foreach ($contacts as $item)
                                                       <tr>
                                                           <td>{{ $item->name }}</td>
                                                           <td>{{ $item->mobile }}</td>
                                                           <td>{{ $item->email }}</td>
                                                           <td>
                                                            @if (!empty($item->company_name))
                                                                {{ $item->company_name }}
                                                            @else
                                                                -
                                                            @endif
                                                            </td>
                                                           <td>
                                                            @if (!empty($item->project_description))
                                                                {{ $item->project_description }}
                                                            @else
                                                                 -
                                                            @endif
                                                            </td>
                                                           <td>{{ date('d M, Y h:i A', strtotime($item->created_at)) }}</td>
                                                       </tr>
                                                   @endforeach
                                                @endcan
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable({
        "ordering": false
    });
});
</script>
