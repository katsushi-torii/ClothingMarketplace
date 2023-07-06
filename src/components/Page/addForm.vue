<template>
    <HeaderSection/>
        <main class="addForm">
        <h2>Sell new Clothing</h2>
        <form enctype="multipart/form-data" v-on:submit.prevent="postProduct">
            <aside>
                <label for="pName">Product name:</label>
                <input type="text" name="pName" id="pName" required v-model.lazy="productObj.productName">
            </aside>
            <aside>
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required v-model.lazy="productObj.price">
            </aside>
            <aside>
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" required v-model.lazy="productObj.baseColor">
            </aside>
            <aside>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required v-model.lazy="productObj.gender">
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
                <select @change="typechange" ref="type" name="type" id="type" required v-model.lazy="productObj.type">
                    <option selected disabled></option>
                    <optgroup label="Accessories">
                        <option value="Accessory Gift Set">Accessory Gift Set</option>
                        <option value="Backpacks">Backpacks</option>
                        <option value="Bangle">Bangle</option>
                        <option value="Beauty Accessory">Beauty Accessory</option>
                        <option value="Bracelet">Bracelet</option>
                        <option value="Caps">Caps</option>
                        <option value="Clutches">Clutches</option>
                        <option value="Duffel Bag">Duffel Bag</option>
                        <option value="Earrings">Earrings</option>
                        <option value="Handbags">Handbags</option>
                        <option value="Headband">Headband</option>
                        <option value="Jewellery Set">Jewellery Set</option>
                        <option value="Laptop Bag">Laptop Bag</option>
                        <option value="Messenger Bag">Messenger Bag</option>
                        <option value="Mobile Pouch">Mobile Pouch</option>
                        <option value="Necklace and Chains">Necklace and Chains</option>
                        <option value="Pendant">Pendant</option>
                        <option value="Ring">Ring</option>
                        <option value="Mufflers">Mufflers</option>
                        <option value="Scarves">Scarves</option>
                        <option value="Socks">Socks</option>
                        <option value="Travel Accessory">Travel Accessory</option>
                        <option value="Trolley Bag">Trolley Bag</option>
                    </optgroup>
                    <optgroup label="Bottomwear">
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
                    <optgroup label="Shoes">
                        <option value="Casual Shoes">Casual Shoes</option>
                        <option value="Flats">Flats</option>
                        <option value="Flip Flops">Flip Flops</option>
                        <option value="Formal Shoes">Formal Shoes</option>
                        <option value="Heels">Heels</option>
                        <option value="Sandals">Sandals</option>
                        <option value="Sports Sandals">Sports Sandals</option>
                        <option value="Sports Shoes">Sports Shoes</option>
                    </optgroup>
                    <optgroup label="Topwear">
                        <option value="Baby Dolls">Baby Dolls</option>
                        <option value="Bath Robe">Bath Robe</option>
                        <option value="Blazers">Blazers</option>
                        <option value="Boxers">Boxers</option>
                        <option value="Bra">Bra</option>
                        <option value="Briefs">Briefs</option>
                        <option value="Camisoles">Camisoles</option>
                        <option value="Dupatta">Dupatta</option>
                        <option value="Dresses">Dresses</option>
                        <option value="Innerwear Vests">Innerwear Vests</option>
                        <option value="Jackets">Jackets</option>
                        <option value="Jumpsuit">Jumpsuit</option>
                        <option value="Kurtas">Kurtas</option>
                        <option value="Kurtis">Kurtis</option>
                        <option value="Lounge Pants">Lounge Pants</option>
                        <option value="Night suits">Night suits</option>
                        <option value="Nightdress">Nightdress</option>
                        <option value="Rain Jacket">Rain Jacket</option>
                        <option value="Robe">Robe</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Shrug">Shrug</option>
                        <option value="Suspenders">Suspenders</option>
                        <option value="Sweaters">Sweaters</option>
                        <option value="Sweatshirts">Sweatshirts</option>
                        <option value="Tops">Tops</option>
                        <option value="Trunk">Trunk</option>
                        <option value="Tshirts">Tshirts</option>
                        <option value="Tunics">Tunics</option>
                        <option value="Waistcoat">Waistcoat</option>
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
            <aside>
                <label for="picture">Picture:</label>
                <label for="picture" class="fileButton">Select file</label>
                <input type="file" name="picture" id="picture" ref="fileForm" @change="fileChange" hidden>
            </aside>
            <button type="submit">Upload</button>
        </form>
        <img :src="url" alt="">
    </main>
    <FooterSection/>
</template>

<script>
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';
import $ from 'jquery';
import VueCookies from 'vue-cookies';

export default{
    name:'addFormPage',
    components:{
        FooterSection,
        HeaderSection
    },  
    data() {
        return {
            productApi: "http://localhost:80/karigui/rest-api/rest/api/V1/addForm.php",
            
            productObj: {
                productName: "",
                price: "",
                baseColor: "",
                gender: "",
                category: "",
                type: "",
                size: "",
                userId: "",
                image:""
            },
            url:"",
            
            logged: false,
            userName: "",
            userId:null,
            loginUser:""
        }
    },
    methods: {
        async postProduct() {
            const index = this.$refs['type'].selectedIndex;
            const option = this.$refs['type'].options[index];
            const optgroup = option.parentElement;
            const category = optgroup.getAttribute("label");
            this.productObj.userId = this.loginUser;
            this.productObj.image  = this.url;

            switch(category) {
                case "Shoes":
                    this.productObj.size= $('.footSize').val().toString();
                    break;
                case "Accessories":
                    this.productObj.size= "Unique";
                    break;
                default:
                    this.productObj.size= $('.normalSize').val();
                    break;
            }
            try {
                console.log(this.productObj);
                await fetch(
                this.productApi,
                {
                    method: "POST",
                    body: JSON.stringify(this.productObj)
                }
                ).then((response) => response.text()
                ).then((data) => {
                console.log(data);
                // window.location.replace( "./profile" );
                });
            } catch(error) {
                console.log(error);
            }
        },
        typechange(e){
            const index= e.target.selectedIndex;
            const option = e.target.options[index];
            const optgroup = option.parentElement;
            const category = optgroup.getAttribute("label");
            this.productObj.category= category;

            switch(category) {
                case "Shoes":
                    $('.normalSize').hide();
                    $('.noSize').hide();    
                    $('.footSize').show();
                    break;
                case "Accessories":
                    $('.normalSize').hide();
                    $('.footSize').hide();
                    $('.noSize').show();
                    break;
                default:
                    $('.footSize').hide();
                    $('.noSize').hide();
                    $('.normalSize').show();
                    break;
            }
        },
        fileChange(){
            const file = this.$refs.fileForm.files[0];
            this.url = URL.createObjectURL(file);
            console.log(this.url);
        }
    },
    created() {
        if (VueCookies.isKey("user")) {
            this.userName ="Welcome, "+ VueCookies.get("user").userName + "!";
            this.userId = VueCookies.get("user").userId;
            this.logged = true;
            this.loginUser = VueCookies.get("user").userId;
        } else {
            this.logged = false;

        }
    }
}
</script>