import React from 'react'
import styles from '../styles.js'
import resources from '../resources.js'
export default function Form(props){
    return(
        <div style={styles.form}>
            <form action="http://localhost:4000/login" method="POST">
                <div>
                    <center>
                        <img src={resources.basic_lock} alt="form-icon"/>
                        <hr style={styles.formUnderline}/>
                    </center>
                </div>
                <label style={styles.userLabel}>Username</label><br/>
                <input style={styles.input} type="text" placeholder="example123" name="userName" id="userName" required/><br/>
                <label style={styles.userPasswordLabel}>User password</label><br />
                <input style={styles.input} type="password" placeholder="****" name="userPass" id="userPass" required/><br/>
                <label>User role</label><br />
                <select name="userRole" id="userRole">
                    <option>admin</option>
                    <option>client</option>
                    <option>maintenance</option>
                </select><br/>
                <input style={styles.button} type="image" src={resources.basic_key}/>
            </form>
        </div>
    )
}