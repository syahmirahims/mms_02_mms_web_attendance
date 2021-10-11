<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMS Attendance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/attendance.css') }}">
</head>

<body onload="updateClock(); setInterval('updateClock()', 1000)">

    <div class="container">

        <div class="card">
            <h2>MMS ATTENDANCE</h2>
            <hr>
            <div class="card-body">
                <div class="clock">
                    <span id="clock">&nbsp;</span>
                </div>

                <form action="/record_function" method="GET">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="name" name="name" id="name" value="{{$userName}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <!-- <label>Department</label> -->
                        <input type="hidden" name="department" id="department" value="{{$jobTitle}}" class="form-control" readonly> 
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <i class="far fa-question-circle" data-toggle="modal" data-target="#myModal"></i>
                        <select class="form-control" name="category" id="category">
                            <option value="-">-</option>
                            <option value="Record In">Record In</option>
                            <option value="Record Out">Record Out</option>
                            <option value="Record In (Personal)">Record In (Personal)</option>
                            <option value="Record Out (Personal)">Record Out (Personal)</option>
                            <option value="Special Request">Special Request</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
                    </div>

                    <button type="submit" name="recordbtn" class="btn btn-success">Record</button>
                    <a href="/signout" class="btn btn-danger" style="float:right">Log Out</a>                  
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Developed by Syahmi Rahim</p>
    </div>

    <!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">DEFINITION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <h6><u>Record In</u></h6>
                    <p>Record of first time of coming into work and record of time coming back from lunch. <br> <i class="malay">Catatan masa mula datang bekerja dan catatan masa keluar dari waktu makan tengahari.</i></p>
                    <br>
                    <h6><u>Record Out</u></h6>
                    <p>Record of time of the end of the day from work and record of time going out for lunch. <br> <i class="malay">Catatan masa habis waktu bekerja dan catatan masa keluar untuk waktu makan tengahari.</i></p>
                    <br>
                    <h6><u>Record In (Personal)</u></h6>
                    <p>Time into work after complete of personal matters. <br> <i class="malay">Masa balik semula bekerja setelah selesai perkara peribadi.</i></p>
                    <br>
                    <h6><u>Record Out (Personal)</u></h6>
                    <p>Time out for personal matters; as notified and approved by supervisor. <br> <i class="malay">Masa keluar dari bekerja untuk perkara peribadi; dimaklumkan dan dibenarkan oleh ketua.</i></p>
                    <br>
                    <h6><u>Special Request</u></h6>
                    <p>To inform HR in requesting to make additions or amendments to attendance log book e.g. to record ad hoc overtime, correct attendance log time or others. <br> <i class="malay">Untuk memaklumkan HR bagi memohon tambahan atau pembetulan terhadap rekod catitan kedatangan.</i></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/67c061dc5a.js" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/realtime_clock.js') }}"></script>
</body>

</html>