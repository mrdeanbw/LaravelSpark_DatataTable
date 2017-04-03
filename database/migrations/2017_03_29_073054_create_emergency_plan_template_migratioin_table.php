<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//class EmergencyPlanTemplateMigration extends Migration   CreateEmergencyPlanTemplatesTable
class CreateEmergencyPlanTemplateMigratioinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_plan_templates', function (Blueprint $table) {
            $table->integer('tenant_id');
            $table->integer('partner_id');
            $table->integer('organisation_id');
            $table->integer('facility_id');
            $table->string('slug');
            $table->string('type');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('display_sequence')->default(100);
            $table->boolean('required');
            $table->integer('user_editable')->default(0);
            $table->integer('parent_template_id')->default(0);
            $table->integer('completion_status')->default(0);
            $table->longText('template')->nullable();
            $table->string('template_file')->nullable();
            $table->string('version');
            $table->integer('industry_category_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emergency_plan_templates');
    }
}