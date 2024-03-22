import React from "react";
import { useState,useEffect } from 'react';
import hand_icon from "../Assets/hand_icon.png";
import arrow_icon from "../Assets/arrow.png";
import hero_image from "../Assets/hero_image.png"
import './Hero.css';

const Hero = () => {
    return ( 
    <div className="hero">
        <div className="hero-left">
            <h2>New Arraivals</h2>
            <div>
                <div className="hero-hand-icon">
                    <p>New</p>
                    <img src={hand_icon} />
                </div>
                <p>Collections</p>
                <p>for Everyone</p>
            </div>
            <div className="hero-latest-btn">
                <div>Latest Collection</div>
                <img src={arrow_icon}/>
            </div>
        </div>
        <div className="hero-right">
        <img src={hero_image}/>
        </div>
         
    </div>
    )
}

export default Hero;
