<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "address" => $this->address,
            "logo" => asset($this->logo),
            "email" => $this->email,
            "contact" => $this->contact,
            "registration_no" => $this->registration_no,
            "pan_no" => $this->pan_no,
            "inforamtion_registration_no" => $this->information_registration_no,
            "contact_no_for_ads" => $this->contact_no_for_ads,



        ];
    }
}
