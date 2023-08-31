package com.example.security.springsecurity.account;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

//問３－１ Serviceであることを表すアノテーションを記述
@Service
public class AccountService implements UserDetailsService {

    //問３－２ 自動でインスタンス生成をするアノテーションを記述
    @Autowired
    private AccountRepository repository;

    @Autowired
    private PasswordEncoder passwordEncoder;

	private List<Account> result;

    @Override
    public Account loadUserByUsername(String username) throws UsernameNotFoundException {
        if (username == null || "".equals(username)) {
            throw new UsernameNotFoundException("Username is empty");
        }

        Account user = repository.findByUsername(username);
        if (user == null) {
            throw new UsernameNotFoundException("User not found: " + username);
        }

        return user;
    }

    public List<Account> findAllList() {
    	result = repository.findAll();
		return result;
	}


    //adminを登録するメソッド
    @Transactional
    public void registerAdmin(String username, String password, String mailAddress) {
        //問３－３ 引数をもとにAccountクラスのインスタンスを生成する構文を記述（passwordはハッシュ化）
    	Account user = new Account(username, passwordEncoder.encode(password), mailAddress);
        user.setAdmin(true);
        //userをもとにadmin情報の登録か更新を行う
        repository.save(user);
    }

    //管理者を登録するメソッド
    @Transactional
    public void registerManager(String username, String password, String mailAddress) {
        Account user = new Account(username, passwordEncoder.encode(password), mailAddress);
        user.setManager(true);
        repository.save(user);
    }

    //一般ユーザを登録するメソッド
    @Transactional
    public void registerUser(String username, String password, String mailAddress) {
        Account user = new Account(username, passwordEncoder.encode(password), mailAddress);
        repository.save(user);
    }

}