Laravelda

1. php artisan make:command SayWelcome

2.
class SayWelcome extends Command
{
    protected $signature = 'mycommand/welcome';
    protected $description = 'Display Hello World';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        echo 'Hello World';
    }
}