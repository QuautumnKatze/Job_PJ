<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
</head>

<body>

    <h1>Yêu cầu xác minh nhà tuyển dụng</h1>
    <p>Nhà tuyển dụng mới vừa đăng ký:</p>
    <p>Mã nhà tuyển dụng: {{$recruiter->recruiter_id}} </p>
    <p>Tên người đăng ký: {{ $recruiter->full_name }}</p>
    <p>Email: {{ $recruiter->email }}</p>
    <p>Tên công ty: {{$recruiter->company_name}}</p>
    <p>Số điện thoại: {{$recruiter->phone}}</p>
    <p>Địa chỉ công ty: {{$recruiter->location}}</p>
    <p>Vui lòng liên với nhà tuyển dụng để xác minh.</p>
</body>

</html>