<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponser{

	/**
	 * Success json response
	 *
	 * @param array $data
	 * @param string|null $message
	 * @param integer|null $code
	 * @return JsonResponse
	 */
    protected function successResponse($data, $message = null, $code = 200): JsonResponse
	{
		$response = [
			'status'=> 'Success', 
			'message' => $message, 
			'data' => $data
		];
		if (isset($data['data'])) {
			$response['data'] = $data['data'];
			unset($data['data']);
		}
		if (isset($data['current_page'])) {
			$response['pagination'] = $data;
		}

		return response()->json($response, $code);
	}

	/**
	 * Error json response
	 *
	 * @param string|array|null $data
	 * @param integer|null $code
	 * @return JsonResponse
	 */
	protected function errorResponse($data = null, $code = 400): JsonResponse
	{
		$response = [
			'status'=>'Error',
			'message' => $data,
			'data' => null
		];
		if (is_array($data)) {
			if (isset($data['field'])) {
				$response['data'] = ['field' => $data['field']];
			}
			$response['message'] = $data['message'];
		}

		return response()->json($response, $code);
	}

}