<?php

namespace App\Http\Resources\Website;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WebsiteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'uuid'          => $this->uuid,
            'url'           => $this->url,
            'scan'          => $this->scans ?? null,
            'is_verified'   => $this->is_verified ?? null,
            'user'          => $this->user,
            'created_at'    => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
