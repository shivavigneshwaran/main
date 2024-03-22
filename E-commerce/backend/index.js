const port = 4000;
const express = require('express');
const app = express();
const mongoose = require('mongoose');
const jwt = require("jsonwebtoken");
const multer = require("multer");
const path = require("path");
const cors = require("cors");
app.use(express.json());
app.use(cors());

//DataBase Connection With MongoDB
const encodedPassword = encodeURIComponent("098112@kec");
mongoose.connect(`mongodb+srv://sivvignesh:${encodedPassword}@cluster0.o131g3b.mongodb.net/`);


// API Creation
app.get("/",(req,res)=>{
    res.send("Express App Is Running...");
});
//Image Storage Engine
const storage = multer.diskStorage({
    destination:'./upload/images',
    filename:(req,file,cb)=>{
        return cb(null,`${file.fieldname}_${Date.now()}${path.extname(file.originalname)}`)
    }
});
const upload = multer({storage:storage});

//Creating Upload EndPoint for Images

app.use('/images',express.static('upload/images'));
app.post("/upload",upload.single('product'),(req,res)=>{
    res.json({
        success:1,
        imageUrl:`http://localhost:${port}/images/${req.file.filename}`
    })
});

//Schema for Creating Products
const Product = mongoose.model("Product",{
    id:{
        type:Number,
        required:true,

    },
    name:{
        type:String,
        required:true,
    },
    image:{
        type:String,
        required:true,

    },
    category:{
        type:String,
        required:true,

    },
    new_price:{
        type:Number,
        required:true
    },
    old_price:{
        type:Number,
        required:true,
    },
    date:{
        type:Date,
        default:Date.now(),
    },
    available:{
        type:Boolean,
        default:true,
    },

});

app.post('/addproduct', async (req, res) => {
    try {
        const { id, name, image, category, new_price, old_price } = req.body;
        const product = new Product({
            id: id,
            name: name,
            image: image,
            category: category,
            new_price: new_price,
            old_price: old_price,
        });
        console.log(product);
        await product.save();
        console.log('Product saved successfully');
        return res.json({ success: true, name: name });
    } catch (error) {
        console.error('Error while saving product:', error);
        res.status(500).json({ success: false, error: 'Failed to save product' });
    }
});


//Schema for Creating User model

const User = mongoose.model("Users",{
    name:{
        type:String,
    },
    email:{
        type:String,
        unique:true,
    },
    password:{
        type:String,
    },
    cartData:{
        type:Object,
    },
    date:{
        type:Date,
        default:Date.now()
    }
});

// Creating EndPoint for Registering the User
app.post('/signup',async (req,res) => {
let check = await User.findOne({email:req.body.email});
if(check){
return res.status(400).json({success:false,error:"The User Is Already Existing"});
}
let cart = {} ;
for (let i=0;i<300;i++){
    cart[i]=0;
}
let user = new User({
    name:req.body.name,
    email:req.body.email,
    password:req.body.password,
    cartData:cart,

});
await user.save();
const data = {
    user:{
        id:user.id,
    }
}
const token = jwt.sign(data,'secret_ecom');

res.status(200).json({success:true,token:token});
});
app.listen(port,(error)=>{
    if(!error){
        console.log("Server Running on Port"+port);
    }else{
        console.log("Error: "+error);
    }
});