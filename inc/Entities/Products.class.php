<?php

class Product {
    /**
     * @var integer
     */
    private int $productId;

    /**
     * @var string
     */
    private string $gender;

    /**
     * @var string
     */
    private string $category;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $baseColor;

    /**
     * @var string
     */
    private string $productName;

    /**
     * @var int
     */
    private int $price;

    /**
     * @var string
     */
    private string $size;

    /**
     * @var integer
     */
    private int $userId;

    /**
     * @var string
     */
    private string $image;

	public function getProductId() {
		return $this->productId;
	}

	public function getGender() {
		return $this->gender;
	}

	public function setGender(string $gender) {
		$this->gender = $gender;
	}

	public function getCategory() {
		return $this->category;
	}

	public function setCategory(string $category) {
		$this->category = $category;
	}

	public function getType() {
		return $this->type;
	}

	public function setType(string $type) {
		$this->type = $type;
	}

	public function getBaseColor() {
		return $this->baseColor;
	}

	public function setBaseColor(string $baseColor) {
		$this->baseColor = $baseColor;
	}

	public function getProductName() {
		return $this->productName;
	}

	public function setProductName(string $productName) {
		$this->productName = $productName;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice(int $price) {
		$this->price = $price;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize(string $size) {
		$this->size = $size;
	}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId(int $userId) {
		$this->userId = $userId;
	}

	public function getImage() {
		return $this->image;
	}

	public function setImage(string $image) {
		$this->image = $image;
	}


}