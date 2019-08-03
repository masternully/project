<?php

namespace App\Console\Commands;

use App\Question;
use Illuminate\Console\Command;

class AddQuestion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:addquestion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $question = new Question();
        $question->title = 'Title' . time();
        $question->body = 'Body';
        $question->user_id = 1;
        $question->save();
    }
}
