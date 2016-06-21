<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('BookingInfo', function(Blueprint $table)
		{
			$table->string('orderId', 45);
			$table->string('hotelIdbj', 45)->nullable();
			$table->string('resalerCd', 16)->nullable();
			$table->string('resalerOrderNum', 32)->nullable();
			$table->string('resalerCity', 45)->nullable();
			$table->string('resalarHotelId', 45)->nullable();
			$table->string('resalerhotelSeq', 48)->nullable();
			$table->string('providerCd', 16)->nullable();
			$table->string('providerCity', 45)->nullable();
			$table->string('bookingRef', 45)->nullable();
			$table->string('providerHotelId', 45)->nullable();
			$table->string('payType', 12)->nullable();
			$table->string('status', 20)->nullable();
			$table->integer('totalPrice')->nullable();
			$table->string('currencyCode', 6)->nullable();
			$table->integer('rmbPrice')->nullable();
			$table->string('hotelAddress', 256)->nullable();
			$table->string('cityName', 20)->nullable();
			$table->string('hotelPhone', 45)->nullable();
			$table->string('orderDate', 21)->nullable();
			$table->string('contactName', 45)->nullable();
			$table->string('contactPhone', 45)->nullable();
			$table->string('contactEmail', 128)->nullable();
			$table->string('customerIp', 64)->nullable();
			$table->string('invoiceCode', 8)->nullable();
			$table->string('customerArriveTime', 64)->nullable();
			$table->string('instantConfirm', 16)->nullable();
			$table->string('specialRemarks', 256)->nullable();
			$table->string('resalarRoomId', 20)->nullable();
			$table->string('prices', 45)->nullable();
			$table->string('roomRate', 45)->nullable();
			$table->string('taxAndFee', 45)->nullable();
			$table->string('bedChoice', 128)->nullable();
			$table->string('requiredAction', 16)->nullable();
			$table->string('result', 16)->nullable();
			$table->string('reason', 512)->nullable();
			$table->integer('isValid')->nullable();
			$table->timestamps();
			$table->primary(['orderId','created_at']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('BookingInfo');
	}

}
