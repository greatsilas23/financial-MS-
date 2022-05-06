import React from 'react'
import styles from '../styles.js'
import resources from '../resources.js'
export default function AboutProjectApp(){
    return(
        <div style={styles.form}>
            <img src={resources.basic_target} alt="target"/>
            <p>To be a leading information source for school activities</p>
        </div>
    )
}