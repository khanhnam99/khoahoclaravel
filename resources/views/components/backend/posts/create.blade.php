<x-layout.backend>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Create</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="card">

                            <div class="card-body">
                                <div class="container">

                                        <form class="row g-3 w-75" demo="needs-validation" method="post" enctype="multipart/form-data" action="{{ Route('backend.posts.store') }}" novalidate>
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="inputEmail4" class="form-label">Name</label>
                                                <input type="text" name="locales[vi][name]" value="{{ old("locales")['vi']['name'] }}" class="form-control" id="inputEmail4" required>
                                                @if ($errors->has('locales.vi.name'))
                                                 <div class="invalid-feedback-custom">{{ $errors->first('locales.vi.name') }}</div>
                                               @endif
                                            </div>

                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">English Name</label>
                                                <input type="text" class="form-control" id="inputAddress" name="locales[en][name]" value="{{ old("locales")['en']['name'] }}">
                                                @if ($errors->has('locales.en.name'))
                                                    <div class="invalid-feedback-custom">{{ $errors->first('locales.en.name') }}</div>
                                                @endif
                                            </div>

                                            <div class="col-12">
                                                <label for="inputAddress3" class="form-label">Description</label>
                                                <textarea class="form-control" id="inputAddress2" name="locales[vi][description]" maxlength="500" rows="4" aria-describedby="settingsAboutHelp">{{ old("locales")['vi']['description'] }}</textarea>
                                            </div>

                                            <div class="col-12">
                                                <label for="inputAddress2" class="form-label">English Description</label>
                                                <textarea class="form-control" name="locales[en][description]" id="inputAddress3" maxlength="500" rows="4" aria-describedby="settingsAboutHelp">{{ old("locales")['en']['description'] }}</textarea>
                                            </div>


                                            <div class="col-md-12">
                                                <label for="inputState" class="form-label">Module</label>
                                                <select id="inputState" class="form-select" name="category_id">
                                                    <option selected="" {{ old('name') == 1 ? "selected" : "" }}>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>


                                            <div class="col-md-12">
                                                <label for="inputState" class="form-label">Module</label>
                                                <select id="inputState" class="form-select" name="module_id">
                                                    <option selected="" {{ old('name') == 1 ? "selected" : "" }}>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Active ?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </form>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.backend.shared.modal',['urlRedirect' => Route('backend.category.index')])
    <x-slot name="javascript">
        <script src="{{ asset('backend/assets/js/backend/common/delete.js') }}"></script>
    </x-slot>

</x-layout.backend>



