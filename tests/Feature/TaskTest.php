<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Requests\CreateTask;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{

  use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->seed('FoldersTableSeeder');
    }

   /**
    * 期限日が日付ではない場合はバリデーションエラー
    * @test
    */

    public function due_date_should_be_date()
    {
      $response = $this->post('/folders/1/tasks/create',[
        'title' => 'Sample task',
        'due_date' => 123, //不正なデータ(数値)
      ]);
      $response->assertSessionHasErrors([
        'due_date' => '期限日には日付を入力してください。'
      ]);
    }

   /**
    * 期限日が過去日付の場合はバリデーションエラー
    * @tests
    */
    public function due_date_shoule_not_be_past()
    {
      $response = $this->post('/folders/1/tasks/create',[
        'title' => 'Sample task',
        'due_date' => Carbon::yesterday()->format('Y/m/d'), //不正なデータ(昨日の日付)
      ]);
      $response->assertSessionHasErrors([
        'due_date' => '期限日には今日以降の日付を入力してください。',
      ]);
    }
}
