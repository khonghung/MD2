<!-- Trường startTime và endTime là private với phương thức getter để trả về giá trị của 
startTime và endTime.

Phương thức khởi tạo không tham số khởi tạo startTime với thời gian hiện tại của hệ thống.

Phương thức start() để reset startTime về thời gian hiện tại của hệ thống.

Phương thức stop() để thiết đặt endTime về thời gian hiện tại của hệ thống.

Phương thức getElapsedTime() trả về thời gian đã trôi qua theo số milisecond giây

Vẽ sơ đồ UML cho lớp StopWatch và cài đặt lớp.

Viết chương trình đo thời gian thực thi của thuật toán sắp xếp chọn (selection sort) 
cho 100,000 số. -->



<?php
class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('Y-m-d H:i:s');
    }



    public function start()
    {
        $this->startTime = date('Y-m-d H:i:s');
    }



    public function stop()
    {
        $this->endTime = date('Y-m-d H:i:s');
    }



    public function getElapsedTime()
    {
        echo "<br /> test <br />";
        return $this->getEndTime() - $this->getStartTime();
    }



    public function setStartTime($time)
    {
        $this->startTime = $time;
    }




    public function getStartTime()
    {
        echo $this->startTime;
        return $this->startTime;
    }



    public function setEndTime($time)
    {
        $this->endTime = $time;
    }


    public function getEndTime()
    {
        echo $this->endTime;
        return $this->endTime;
    }
}





$stop1 = new Stopwatch();





for ($i = 0; $i < 100000; $i++) {

    echo $stop1->start();
    echo "<br/>";
    echo $stop1->stop();
    echo "<br/>";
    echo $stop1->getElapsedTime();
    echo "<br/>";
    $start = microtime(true);
    sleep(2);
    $end = (microtime(true) - $start);
    echo "elapsed time: $end";
}

?>