<x-layout.backend>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Posts</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('storage/products/CUMgUljLDaAiZ2B8fKqpGFUo8HVrwfrlr1qwSTWe.png') }}" class="img img-thumbnail">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-container breadcrumb-separator-chevron">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Table foot</h5>
                            </div>
                            <div class="card-body">
                                <div class="example-container">
                                    <div class="example-content">
                                        <table class="table">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="width-5-percent">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col" class="width-15-percent">Create Date</th>
                                                <th scope="col" class="width-15-percent">Status</th>
                                                <th scope="col" class="width-20-percent">Functions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($items) && count($items) > 0)
                                                @foreach($items as $item)
                                                    <tr>
                                                        <th scope="row">{{ $offset }}</th>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ !empty($item->created_at) ? date('d/m/Y',strtotime($item->created_at)) : '' }}</td>
                                                        <td>
                                                            @if($item->status == 1)
                                                                <span class="badge badge-style-bordered badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-style-bordered badge-warning">Deactivated</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a  class="btn btn-primary btn-sm"><i class="material-icons">create</i> Edit </a>
                                                            <a  class="btn btn-secondary btn-sm deleteAction"  data-id="{{ $item->id }}"><i class="material-icons">delete_outline</i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    @php $offset++ @endphp
                                                @endforeach
                                            @else
                                              @include('components.backend.shared.category')
                                            @endif
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>


                            </div>

                        </div>

                        @if(!empty($items) && count($items) > 0)
                            {!! $pager !!}
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.backend.shared.modal',['urlRedirect' => Route('backend.posts.index'),'urlDelete' => Route('backend.posts.delete')])
    <x-slot name="javascript">
        <script src="{{ asset('backend/assets/js/backend/common/delete.js') }}"></script>
    </x-slot>

</x-layout.backend>

