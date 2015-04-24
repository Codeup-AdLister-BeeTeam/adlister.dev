<!-- will set up to log messages from incorrect user login attempts -->
<?php
class Log
{
    public $filename = '';
    public $handle = '';
    // public $prefix = '';

    public function __construct($prefix = 'log')
    {

        $this->filename = $prefix .'-'. date('Y-m-d').".log";
        $this->handle = fopen($this->filename, 'a');
    }

    
    public function __destruct()
    {
        fclose($this->handle);


    }

    public function logMessage($logLevel, $message) 
    {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $logString = $date." ".$time;
        fwrite($this->handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
    }


    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }

}
