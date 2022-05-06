import React from 'react'
import styles from './styles.js'

function FormLabel(props){
    return(
        <div style={styles.inputLabel}>
            <label style={styles.contentLabel}>Username:</label>
            <label style={styles.errorLabel}></Label>
        </div>
    )
}

export default FormLabel