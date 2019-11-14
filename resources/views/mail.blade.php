<!DOCTYPE html>
<html>
<body>
<head style="font-size:medium;color: #0f0f0f;font-weight: bold">Application</head><br>
    Name:{{$data['name']}}<br>
    Citizenship Number:{{$data['citizen']}}<br>
    Mobile number:{{$data['phone']}}<br>
    Email:{{$data['email']}}<br>
    Father Name:{{$data['fathername']}}<br>
    Mother Name:{{$data['mothername']}}<br>
    District:{{$data['district']}}<br>
    Municipality:{{$data['municipality']}}<br>
    Ward:{{$data['ward']}}<br>
    Zip :{{$data['zip']}}<br>
    Have you ever convicted of a criminal charges? :{{$data['criminal']}}<br>
    Have you ever been discharged from duty?: {{$data['duty']}}<br>
    Are you ready to work under pressure? {{$data['deadline']}}<br>
    Skills:{{$data['skills']}}<br>
    Language:{{$data['language']}}<br>
    Salary :{{$data['salary']}}<br>
    Work: {{$data['work']}}<br>
    Education: {{$data['education']}}<br>
    University: {{$data['university']}}<br>
    Applying for: {{$data['apply']}}<br>
    Message: {{$data['message']}}<br>
    Citizenship:{{asset($data['citizenship'])}}<br>
    CV:{{asset($data['cv'])}}<br>
    Passport Size Photo:{{asset($data['pp'])}}<br>
</body>
</html>


