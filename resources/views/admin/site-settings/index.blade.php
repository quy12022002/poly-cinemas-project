@extends('admin.layouts.master')

@section('title')
    Cập nhật cấu hình website
@endsection

@section('content')
    <form action="{{ route('admin.site-settings.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Cập nhật cấu hình website</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Cập nhật</li>
                        </ol>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-6 text-center">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </div>
            <div class="col-lg-6 text-center">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#confirmResetModal">
                    Đặt lại về mặc định
                </button>
            </div>
        </div><br>

        <!-- Thông tin chung -->
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thông tin cơ bản</h4>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <label for="site_name" class="form-label">Tên Website</label>
                                <input type="text" class="form-control" id="site_name" name="site_name"
                                    value="{{ $settings->site_name }}">
                                @error('site_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="brand_name" class="form-label">Tên Thương Hiệu</label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name"
                                    value="{{ $settings->brand_name }}">
                                @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="slogan" class="form-label">Khẩu hiệu</label>
                                <input type="text" class="form-control" id="slogan" name="slogan"
                                    value="{{ $settings->slogan }}">
                                @error('slogan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="phone" class="form-label">Số Điện Thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $settings->phone }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $settings->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="working_hours" class="form-label">Thời Gian Làm Việc</label>
                                <input type="text" class="form-control" id="working_hours" name="working_hours"
                                    value="{{ $settings->working_hours }}">
                                @error('working_hours')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="business_license" class="form-label">Giấy Phép Kinh Doanh</label>
                                <input type="text" class="form-control" id="business_license" name="business_license"
                                    value="{{ $settings->business_license }}">
                                @error('business_license')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="copyright" class="form-label">Bản Quyền</label>
                                <input type="text" class="form-control" id="copyright" name="copyright"
                                    value="{{ $settings->copyright }}">
                                @error('copyright')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="headquarters" class="form-label">Trụ Sở Chính</label>
                                <input type="text" class="form-control" id="headquarters" name="headquarters"
                                    value="{{ $settings->headquarters }}">
                                @error('headquarters')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="facebook_link" class="form-label">Link Facebook</label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                                    value="{{ $settings->facebook_link }}">
                                @error('facebook_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="youtube_link" class="form-label">Link YouTube</label>
                                <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                                    value="{{ $settings->youtube_link }}">
                                @error('youtube_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="instagram_link" class="form-label">Link Instagram</label>
                                <input type="text" class="form-control" id="instagram_link" name="instagram_link"
                                    value="{{ $settings->instagram_link }}">
                                @error('instagram_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Logo Website -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="website_logo" class="form-label">Logo Website</label>
                            <input type="file" name="website_logo" class="form-control"><br>
                            @if ($settings->website_logo)
                                {{-- Kiểm tra xem có phải là ảnh mặc định hay không --}}
                                @if (Str::startsWith($settings->website_logo, 'theme/client/images/'))
                                    <img src="{{ asset($settings->website_logo) }}" alt="Website Logo"
                                        style="max-width: 200px;">
                                @else
                                    <img src="{{ Storage::url($settings->website_logo) }}" alt="Website Logo"
                                        style="max-width: 200px;">
                                @endif
                            @else
                                {{-- Hiển thị ảnh mặc định nếu không có ảnh nào --}}
                                <img src="{{ asset('theme/client/images/header/P.svg') }}" alt="Logo Mặc định"
                                    style="max-width: 200px;">
                            @endif

                            @error('website_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Giới Thiệu -->
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Giới Thiệu</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" name="introduction" placeholder="Nhập nội dung Giới Thiệu">{{ $settings->introduction }}</textarea>
                        </div>
                        @error('introduction')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="introduction_image" class="form-label">Ảnh Giới Thiệu</label>
                            <input type="file" name="introduction_image" class="form-control"><br>
                            <div class="text-center">
                                @if ($settings->introduction_image)
                                {{-- Kiểm tra xem có phải là ảnh mặc định hay không --}}
                                @if (Str::startsWith($settings->introduction_image, 'theme/client/images/'))
                                    <img src="{{ asset($settings->introduction_image) }}" alt="introduction_image" class="rounded-2"
                                        style="max-width: 200px;">
                                @else
                                    <img src="{{ Storage::url($settings->introduction_image) }}" alt="introduction_image" class="rounded-2"
                                        style="max-width: 200px;">
                                @endif
                            @else
                                {{-- Hiển thị ảnh mặc định nếu không có ảnh nào --}}
                                <img src="{{ asset('theme/client/images/header/P.svg') }}" alt="introduction_image" class="rounded-2"
                                    style="max-width: 200px;">
                            @endif
                            </div>

                            @error('introduction_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chính Sách Bảo Mật -->
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Chính Sách Bảo Mật</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" cols="5" name="privacy_policy"
                                placeholder="Nhập nội dung Chính Sách Bảo Mật">{{ $settings->privacy_policy }}</textarea>
                        </div>
                        @error('privacy_policy')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="privacy_policy_image" class="form-label">Ảnh Chính Sách Bảo Mật</label>
                            <input type="file" name="privacy_policy_image" class="form-control"><br>
                            <div class="text-center">
                                @if ($settings->privacy_policy_image)
                                {{-- Kiểm tra xem có phải là ảnh mặc định hay không --}}
                                @if (Str::startsWith($settings->privacy_policy_image, 'theme/client/images/'))
                                    <img src="{{ asset($settings->privacy_policy_image) }}" alt="privacy_policy_image" class="rounded-2"
                                        style="max-width: 200px;">
                                @else
                                    <img src="{{ Storage::url($settings->privacy_policy_image) }}" class="rounded-2"
                                        alt="privacy_policy_image" style="max-width: 200px;">
                                @endif
                            @else
                                {{-- Hiển thị ảnh mặc định nếu không có ảnh nào --}}
                                <img src="{{ asset('theme/client/images/header/P.svg') }}" alt="privacy_policy_image" class="rounded-2"
                                    style="max-width: 200px;">
                            @endif
                            </div>

                            @error('privacy_policy_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Điều Khoản Dịch Vụ -->
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Điều Khoản Dịch Vụ</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" name="terms_of_service"
                                placeholder="Nhập nội dung Điều Khoản Dịch Vụ">{{ $settings->terms_of_service }}</textarea>
                        </div>
                        @error('terms_of_service')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="terms_of_service_image" class="form-label">Ảnh Điều Khoản Dịch Vụ</label>
                            <input type="file" name="terms_of_service_image" class="form-control"><br>
                            <div class="text-center">
                                @if ($settings->terms_of_service_image)
                                {{-- Kiểm tra xem có phải là ảnh mặc định hay không --}}
                                @if (Str::startsWith($settings->terms_of_service_image, 'theme/client/images/'))
                                    <img src="{{ asset($settings->terms_of_service_image) }}" class="rounded-2"
                                        alt="Website Logo" style="max-width: 200px;">
                                @else
                                    <img src="{{ Storage::url($settings->terms_of_service_image) }}" class="rounded-2"
                                        alt="terms_of_service_image" style="max-width: 200px;">
                                @endif
                            @else
                                {{-- Hiển thị ảnh mặc định nếu không có ảnh nào --}}
                                <img src="{{ asset('theme/client/images/header/P.svg') }}" class="rounded-2"
                                    alt="terms_of_service_image" style="max-width: 200px;">
                            @endif
                            </div>

                            @error('terms_of_service_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal xác nhận -->
    <div class="modal fade" id="confirmResetModal" tabindex="-1" aria-labelledby="confirmResetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmResetModalLabel">Xác nhận Đặt lại</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn đặt lại về giao diện mặc định không?<br>
                    Hành động này không thể hoàn tác.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>

                    <!-- Form đặt lại -->
                    <form action="{{ route('admin.site-settings.reset') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Đặt lại về mặc định</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-libs')
    <script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("privacy_policy", {
            width: "100%",
            height: "550px"
        });

        CKEDITOR.replace("terms_of_service", {
            width: "100%",
            height: "500px"
        });

        CKEDITOR.replace("introduction", {
            width: "100%",
            height: "500px"
        });
    </script>
@endsection
