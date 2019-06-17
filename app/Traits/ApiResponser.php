<?php 

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

trait ApiResponser {
	protected function successResponse($data, $code) {
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code) {
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	protected function mostrarTodos(Collection $collection, $code = 200) {
		if ($collection->isEmpty()) {
			return $this->successResponse(['data' => $collection], $code);
		}
	}
}