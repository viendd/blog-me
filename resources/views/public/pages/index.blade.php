@extends('app')
@section('header-title')
    @include('public.layouts.header-title')
@endsection

@section('content')
    <div class="white-section">
        <div class="container section-4">
            <h4 class="title">
                Đăng ký ngay Blog and Me để cùng học tập và kết nối
            </h4>
            <div style="margin-top: 80px">
                <div class="row" style="margin-bottom: 80px">
                    <div class="col-md-6 left">
                        <img
                            class="img-thumbnail"
                            style="border: none"
                            src="{{ env('APP_URL') }}img/laravel-featured.png"
                            alt="Blog and Me-solution-1"
                        />
                    </div>
                    <div class="col-md-6 order-first order-md-last right">
                        <h5 class="section-4--solution-title">
                            Laravel
                            </h6>
                            <p class="section-4--solution-description">
                                <ol>
                                <li>Nâng cấp, cài đặt, … với Composer.</li>
                                <li>
                                    Thao tác với cú pháp đẹp mắt và đơn giản với Eloquent ORM.
                                </li>
                                <li>
                                    Hỗ trợ biến Laravel thành một web service API với Restful API.
                                </li>
                                <li>
                                    Cung cấp các lệnh cần thiết để phát triển ứng dụng với Artisan.
                                </li>
                                <li>
                                    Hỗ trợ tạo các trường trong cơ sở dữ liệu, thêm các cột trong bảng, tạo mối quan hệ giữa các bảng, .. với Migrations.
                                </li>

                                <li>
                                    Cung cấp sẵn các tính năng đăng nhập, đăng ký, quên mật khẩu, … với Authentication.
                                </li>
                                <li>
                                    Hỗ trợ test lỗi để sửa chữa với Unit Testing.

                                </li>
                                </ol>
                            </p>
                    </div>
                </div>
{{--                <div class="row" style="margin-bottom: 80px">--}}
{{--                    <div class="col-md-6 left">--}}
{{--                        <h5 class="section-4--solution-title">--}}
{{--                            Môi trường cộng tác liền mạch, tốc độ, linh hoạt--}}
{{--                        </h5>--}}
{{--                        <p class="section-4--solution-description">--}}
{{--                            Cộng tác giao tiếp tương đương Slack Dễ dàng cộng tác thông qua--}}
{{--                            các kênh âm thanh, hình ảnh và chia sẻ màn hình tương đương--}}
{{--                            Discord Thiết lập và quản lý đầu việc logic hiệu quả như Trello--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 right">--}}
{{--                        <img--}}
{{--                            class="img-thumbnail"--}}
{{--                            style="border: none"--}}
{{--                            src="{{ env('APP_URL') }}img/solution-2.png"--}}
{{--                            alt="Blog and Me-solution-2"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row" style="margin-bottom: 80px">--}}
{{--                    <div class="col-md-6 left">--}}
{{--                        <img--}}
{{--                            class="img-thumbnail"--}}
{{--                            style="border: none"--}}
{{--                            src="{{ env('APP_URL') }}img/solution-3.png"--}}
{{--                            alt="Blog and Me-solution-3"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 order-first order-md-last right">--}}
{{--                        <h5 class="section-4--solution-title">--}}
{{--                            Hệ thống hóa nguồn tri thức ẩn trong doanh nghiệp đến từ giao--}}
{{--                            tiếp công việc hàng ngày--}}
{{--                        </h5>--}}
{{--                        <p class="section-4--solution-description">--}}
{{--                            Des: Việc học tập diễn ra đơn giản ngay tại nơi đòi hỏi tri thức--}}
{{--                            là luồng xử lý công việc. Doanh nghiệp có thể tự tổ chức các--}}
{{--                            chương trình như Neo Manager, Pragmatic Scrum và các chương--}}
{{--                            trình nâng cao, dài hạn.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row" style="margin-bottom: 80px">--}}
{{--                    <div class="col-md-6 left">--}}
{{--                        <h5 class="section-4--solution-title">--}}
{{--                            Môi trường cộng tác liền mạch, tốc độ, linh hoạt--}}
{{--                        </h5>--}}
{{--                        <p class="section-4--solution-description">--}}
{{--                            Cộng tác giao tiếp tương đương Slack Dễ dàng cộng tác thông qua--}}
{{--                            các kênh âm thanh, hình ảnh và chia sẻ màn hình tương đương--}}
{{--                            Discord Thiết lập và quản lý đầu việc logic hiệu quả như Trello--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 right">--}}
{{--                        <img--}}
{{--                            class="img-thumbnail"--}}
{{--                            style="border: none"--}}
{{--                            src="{{ env('APP_URL') }}img/solution-4.png"--}}
{{--                            alt="Blog and Me-solution-4"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('public.layouts.footer')
@endsection

