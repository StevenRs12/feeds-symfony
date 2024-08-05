<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Serializer\Annotation\Groups;

#[MongoDB\Document(db: "Feeds", collection: "feed-data")]
class Feed
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $title_es;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private ?string $city = null;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $description_es;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $price_amount;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $country;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $video;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $image_0;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $image_1;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $image_2;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $image_3;

    #[MongoDB\Field(type: "string")]
    #[Groups(["feed"])]
    private string $image_4;


    public function __construct(
        string $title_es,
        string $description_es,
        ?string $city = null,
        ?string $price_amount = null,
        ?string $country = null,
        ?string $video = null,
        ?string $image_0 = null,
        ?string $image_1 = null,
        ?string $image_2 = null,
        ?string $image_3 = null,
        ?string $image_4 = null
    ) {
        $this->title_es = $title_es;
        $this->description_es = $description_es;
        $this->city = $city;
        $this->price_amount = $price_amount;
        $this->country = $country;
        $this->video = $video;
        $this->image_0 = $image_0;
        $this->image_1 = $image_1;
        $this->image_2 = $image_2;
        $this->image_3 = $image_3;
        $this->image_4 = $image_4;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitleEs(): string
    {
        return $this->title_es;
    }

    public function getDescriptionEs(): string
    {
        return $this->description_es;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }
    public function getPriceAmount(): ?string
    {
        return $this->price_amount;
    }
    public function getCountry(): ?string
    {
        return $this->country;
    }
    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function getImage0(): ?string
    {
        return $this->image_0;
    }
    public function getImage1(): ?string
    {
        return $this->image_1;
    }
    public function getImage2(): ?string
    {
        return $this->image_2;
    }
    public function getImage3(): ?string
    {
        return $this->image_3;
    }
    public function getImage4(): ?string
    {
        return $this->image_4;
    }
}