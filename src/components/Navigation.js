import React from 'react'
import styles from '../styles.js'
import resources from '../resources.js'
export default function Navigation(props){
    return(
        <div style={styles.navigation}>
            <div onClick={props.handleLogin}>
                <img src={resources.basic_lock} alt="login"/>
            </div>
            <div onClick={props.handleAbout}>
                <img src={resources.basic_server} alt="about" />
            </div>
            <div onClick={props.handleContact}>
                <img src={resources.basic_compass} alt="contact-us" />
            </div>
        </div>
    )
}