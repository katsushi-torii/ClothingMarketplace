<template>
    <HeaderSection/>
        <main class="addForm">
        <h2>Sell new Clothing</h2>
        <form action="#" enctype="multipart/form-data">
            <aside>
                <label for="pName">Product name:</label>
                <input type="text" name="pName" id="pName" required>
            </aside>
            <aside>
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required>
            </aside>
            <aside>
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" required>
            </aside>
            <aside>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option selected disabled></option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>
                    <option value="Unisex">Unisex</option>
                </select>
            </aside>
            <aside>
                <label for="type">Type:</label>
                <select name="type" id="type" required>
                    <option selected disabled></option>
                    <optgroup label="Accessories" id="Accessories">
                        <option value="Accessory Gift Set">Accessory Gift Set</option>
                        <option value="Messenger Bag">Messenger Bag</option>
                        <option value="Travel Accessory">Travel Accessory</option>
                    </optgroup>
                    <optgroup label="Apparel Set" id="Apparel Set">
                        <option value="Kurta Sets">Kurta Sets</option>
                    </optgroup>
                    <optgroup label="Bags" id="Bags">
                        <option value="Backpacks">Backpacks</option>
                        <option value="Clutches">Clutches</option>
                        <option value="Duffel Bag">Duffel Bag</option>
                        <option value="Handbags">Handbags</option>
                        <option value="Laptop Bag">Laptop Bag</option>
                        <option value="Messenger Bag">Messenger Bag</option>
                        <option value="Mobile Pouch">Mobile Pouch</option>
                        <option value="Trolley Bag">Trolley Bag</option>
                    </optgroup>
                    <optgroup label="Beauty Accessories" id="Beauty Accessories">
                        <option value="Beauty Accessory">Beauty Accessory</option>
                    </optgroup>
                    <optgroup label="Belts" id="Belts">
                        <option value="Belts">Belts</option>
                    </optgroup>
                    <optgroup label="Bottomwear" id="Bottomwear">
                        <option value="Capris">Capris</option>
                        <option value="Jeans">Jeans</option>
                        <option value="Leggings">Leggings</option>
                        <option value="Patiala">Patiala</option>
                        <option value="Salwar and Dupatta">Salwar and Dupatta</option>
                        <option value="Shorts">Shorts</option>
                        <option value="Skirts">Skirts</option>
                        <option value="Stockings">Stockings</option>
                        <option value="Swimwear">Swimwear</option>
                        <option value="Track Pants">Track Pants</option>
                        <option value="Tracksuits">Tracksuits</option>
                        <option value="Trousers">Trousers</option>
                    </optgroup>
                    <optgroup label="Dress" id="Dress">
                        <option value="Dresses">Dresses</option>
                        <option value="Jumpsuit">Jumpsuit</option>
                    </optgroup>
                    <optgroup label="Eyes" id="Eyes">
                        <option value="Eyeshadow">Eyeshadow</option>
                    </optgroup>
                    <optgroup label="Eyewear" id="Eyewear">
                        <option value="Sunglasses">Sunglasses</option>
                    </optgroup>
                    <optgroup label="Flip Flops" id="Flip Flops">
                        <option value="Flip Flops">Flip Flops</option>
                    </optgroup>
                    <optgroup label="Fragrance" id="Fragrance">
                        <option value="Deodorant">Deodorant</option>
                        <option value="Fragrance Gift Set">Fragrance Gift Set</option>
                        <option value="Perfume and Body Mist">Perfume and Body Mist</option>
                    </optgroup>
                    <optgroup label="Free Gifts" id="Free Gifts">
                        <option value="Free Gifts">Free Gifts</option>
                        <option value="Ties">Ties</option>
                    </optgroup>
                    <optgroup label="Headwear" id="Headwear">
                        <option value="Caps">Caps</option>
                        <option value="Headband">Headband</option>
                    </optgroup>
                    <optgroup label="Innerwear" id="Innerwear">
                        <option value="Boxers">Boxers</option>
                        <option value="Bra">Bra</option>
                        <option value="Briefs">Briefs</option>
                        <option value="Camisoles">Camisoles</option>
                        <option value="Innerwear Vests">Innerwear Vests</option>
                        <option value="Trunk">Trunk</option>
                    </optgroup>
                    <optgroup label="Jewellery" id="Jewellery">
                        <option value="Bangle">Bangle</option>
                        <option value="Bracelet">Bracelet</option>
                        <option value="Earrings">Earrings</option>
                        <option value="Jewellery Set">Jewellery Set</option>
                        <option value="Necklace and Chains">Necklace and Chains</option>
                        <option value="Pendant">Pendant</option>
                        <option value="Ring">Ring</option>
                    </optgroup>
                    <optgroup label="Lips" id="Lips">
                        <option value="Lip Care">Lip Care</option>
                        <option value="Lip Gloss">Lip Gloss</option>
                        <option value="Lip Liner">Lip Liner</option>
                        <option value="Lipstick">Lipstick</option>
                    </optgroup>
                    <optgroup label="Loungewear and Nightwear" id="Loungewear and Nightwear">
                        <option value="Baby Dolls">Baby Dolls</option>
                        <option value="Bath Robe">Bath Robe</option>
                        <option value="Lounge Pants">Lounge Pants</option>
                        <option value="Night suits">Night suits</option>
                        <option value="Nightdress">Nightdress</option>
                        <option value="Robe">Robe</option>
                    </optgroup>
                    <optgroup label="Makeup" id="Makeup">
                        <option value="Compact">Compact</option>
                        <option value="Foundation and Primer">Foundation and Primer</option>
                        <option value="Highlighter and Blush">Highlighter and Blush</option>
                        <option value="Kajal and Eyeliner">Kajal and Eyeliner</option>
                    </optgroup>
                    <optgroup label="Mufflers" id="Mufflers">
                        <option value="Mufflers">Mufflers</option>
                    </optgroup>
                    <optgroup label="Nails" id="Nails">
                        <option value="Nail Polish">Nail Polish</option>
                    </optgroup>
                    <optgroup label="Sandal" id="Sandal">
                        <option value="Sandals">Sandals</option>
                        <option value="Sports Sandals">Sports Sandals</option>
                    </optgroup>
                    <optgroup label="Saree" id="Saree">
                        <option value="Saree">Saree</option>
                    </optgroup>
                    <optgroup label="Scarves" id="Scarves">
                        <option value="Scarves">Scarves</option>
                    </optgroup>
                    <optgroup label="Shoe Accessories" id="Shoe Accessories">
                        <option value="Shoe Accessories">Shoe Accessories</option>
                        <option value="Shoe Laces">Shoe Laces</option>
                    </optgroup>
                    <optgroup label="Shoes" id="Shoes">
                        <option value="Casual Shoes">Casual Shoes</option>
                        <option value="Flats">Flats</option>
                        <option value="Formal Shoes">Formal Shoes</option>
                        <option value="Heels">Heels</option>
                        <option value="Sports Shoes">Sports Shoes</option>
                    </optgroup>
                    <optgroup label="Skin" id="Skin">
                        <option value="Face Moisturisers">Face Moisturisers</option>
                    </optgroup>
                    <optgroup label="Skin Care" id="Skin Care">
                        <option value="Eye Cream">Eye Cream</option>
                        <option value="Face Wash and Cleanser">Face Wash and Cleanser</option>
                    </optgroup>
                    <optgroup label="Socks" id="Socks">
                        <option value="Socks">Socks</option>
                    </optgroup>
                    <optgroup label="Ties" id="Ties">
                        <option value="Ties">Ties</option>
                    </optgroup>
                    <optgroup label="Topwear" id="Topwear">
                        <option value="Blazers">Blazers</option>
                        <option value="Dupatta">Dupatta</option>
                        <option value="Jackets">Jackets</option>
                        <option value="Kurtas">Kurtas</option>
                        <option value="Kurtis">Kurtis</option>
                        <option value="Rain Jacket">Rain Jacket</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Shrug">Shrug</option>
                        <option value="Suspenders">Suspenders</option>
                        <option value="Sweaters">Sweaters</option>
                        <option value="Sweatshirts">Sweatshirts</option>
                        <option value="Tops">Tops</option>
                        <option value="Tshirts">Tshirts</option>
                        <option value="Tunics">Tunics</option>
                        <option value="Waistcoat">Waistcoat</option>
                    </optgroup>
                    <optgroup label="Wallets" id="Wallets">
                        <option value="Wallets">Wallets</option>
                    </optgroup>
                    <optgroup label="Watches" id="Watches">
                        <option value="Watches">Watches</option>
                    </optgroup>
                    <optgroup label="Water Bottle" id="Water Bottle">
                        <option value="Water Bottle">Water Bottle</option>
                    </optgroup>
                </select>
            </aside>
            <aside>
                <label for="size">Size:</label>
                <select class="normalSize" name="size" id="size" hidden>
                    <option selected disabled></option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
                <input class="footSize" type="number" name="size" id="size" placeholder="inches only" min=4 max=10 hidden>
                <h4 class="noSize" hidden>No Size</h4>
            </aside>
            <!-- <aside>
                <label for="picture">Picture:</label>
                <label for="picture" class="fileButton">Select file</label>
                <input type="file" name="picture" id="picture" hidden>
            </aside> -->
            <button type="submit">Upload</button>
        </form>
    </main>
    <FooterSection/>
</template>

<script>
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';
import $ from 'jquery';

export default{
    name:'addFormPage',
    components:{
        FooterSection,
        HeaderSection
    },
    mounted: function() {
        $('[name="type"]').change(function(){
            switch($(`option[value="${$(this).val()}"]`).parent().attr('id')) {
                case "Shoes":
                case "Sandal":
                    $('.normalSize').hide();
                    $('.normalSize').val("");
                    $('.noSize').hide();
                    $('.footSize').show();
                    break;
                case "Accessories":
                    $('.normalSize').hide();
                    $('.normalSize').val("");
                    $('.footSize').hide();
                    $('.footSize').val("");
                    $('.noSize').show();
                    break;
                default:
                    $('.footSize').hide();
                    $('.footSize').val("");
                    $('.noSize').hide();
                    $('.normalSize').show();
                    break;
            }
        })
    }
}
</script>