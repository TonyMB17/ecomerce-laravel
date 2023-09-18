@extends('layouts.admin')
@section('title','Gestion de Documentos')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-description d-flex align-items-center">
                <div class="page-description-content flex-grow-1">
                    <h1>Administrador de Documentos</h1>
                </div>
                <div class="page-description-actions">
                    <a href="#" class="btn btn-primary"><i class="material-icons">add</i>Upload File</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card file-manager-folder">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-fill">
                            <img src="../../assets/images/icons/dropbox.jpeg" alt="" class="file-manager-folder-icon">
                            <span class="file-manager-folder-title">Dropbox</span>
                        </div>
                        <span class="file-manager-folder-capacity">500GB</span>
                    </div>
                    <div class="progress m-t-xxs" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card file-manager-folder">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-fill">
                            <img src="../../assets/images/icons/google_drive.png" alt="" class="file-manager-folder-icon">
                            <span class="file-manager-folder-title">Google Drive</span>
                        </div>
                        <span class="file-manager-folder-capacity">1TB</span>
                    </div>
                    <div class="progress m-t-xxs" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card file-manager-folder">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-fill">
                            <img src="../../assets/images/icons/onedrive.png" alt="" class="file-manager-folder-icon">
                            <span class="file-manager-folder-title">OneDrive</span>
                        </div>
                        <span class="file-manager-folder-capacity">250GB</span>
                    </div>
                    <div class="progress m-t-xxs" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-description">
        <h1>Recent Files</h1>
    </div>
    <div class="row">
        <div class="col-xxl-6">
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">design-components.pdf</a>
                        <span class="p-h-sm">167kb</span>
                        <span class="p-h-sm text-muted">09.14.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-1" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-1">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">MainFragment.kt</a>
                        <span class="p-h-sm">14kb</span>
                        <span class="p-h-sm text-muted">09.03.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-2" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-2">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">MainViewModel.kt</a>
                        <span class="p-h-sm">72kb</span>
                        <span class="p-h-sm text-muted">08.28.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-3" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-3">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">Guidelines.pdf</a>
                        <span class="p-h-sm">567kb</span>
                        <span class="p-h-sm text-muted">08.26.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-4">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">background2.png</a>
                        <span class="p-h-sm">2.8mb</span>
                        <span class="p-h-sm text-muted">08.14.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-5" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-5">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6">
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-warning align-middle m-r-sm">lock</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">app-info.zip</a>
                        <span class="p-h-sm">1.2mb</span>
                        <span class="p-h-sm text-muted">08.02.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-6" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-6">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">ContactsViewModel.kt</a>
                        <span class="p-h-sm">763kb</span>
                        <span class="p-h-sm text-muted">07.26.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-7" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-7">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">avatar-xl.png</a>
                        <span class="p-h-sm">5.6mb</span>
                        <span class="p-h-sm text-muted">07.24.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-8" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-8">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">welcome-login.png</a>
                        <span class="p-h-sm">1.2mb</span>
                        <span class="p-h-sm text-muted">06.29.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-9" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-9">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card file-manager-recent-item">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                        <a href="#" class="file-manager-recent-item-title flex-fill">Material Design Components</a>
                        <span class="p-h-sm">142kb</span>
                        <span class="p-h-sm text-muted">06.27.21</span>
                        <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-10" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-10">
                            <li><a class="dropdown-item" href="#">Share</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                            <li><a class="dropdown-item" href="#">Move to folder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-description">
        <h1>Groups</h1>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card file-manager-group">
                <div class="card-body d-flex align-items-center">
                    <i class="material-icons text-primary">folder</i>
                    <div class="file-manager-group-info flex-fill">
                        <a href="#" class="file-manager-group-title">Photos</a>
                        <span class="file-manager-group-about">141 files, 480MB</span>
                    </div>
                </div>
            </div>
            <div class="card file-manager-group">
                <div class="card-body d-flex align-items-center">
                    <i class="material-icons text-warning">folder</i>
                    <div class="file-manager-group-info flex-fill">
                        <a href="#" class="file-manager-group-title">Other</a>
                        <span class="file-manager-group-about">1,055 files, 60GB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card file-manager-group">
                <div class="card-body d-flex align-items-center">
                    <i class="material-icons text-danger">folder</i>
                    <div class="file-manager-group-info flex-fill">
                        <a href="#" class="file-manager-group-title">Work</a>
                        <span class="file-manager-group-about">769 files, 8.9GB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card file-manager-group">
                <div class="card-body d-flex align-items-center">
                    <i class="material-icons text-success">folder</i>
                    <div class="file-manager-group-info flex-fill">
                        <a href="#" class="file-manager-group-title">Portfolio</a>
                        <span class="file-manager-group-about">18 files, 128MB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection